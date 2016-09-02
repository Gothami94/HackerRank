import javax.swing.*;
import java.awt.*;
import java.util.*;
import java.io.*;
import java.awt.event.*;

//initialize class Dic
public class Dic extends JFrame{

	public static final String file = "wordList.txt";

    private JTextField answerfield;//for give inputs and take the answer
    private JButton ad,del,clr,sim,search;//for buttons
	private JPanel contentPanel,tempPanel1,tempPanel2,tempPanel3;//for panels
	private JTextArea area;//for text area
 	private boolean equalClicked=false, opChosen=false;


 	public Dic(){ //constructor class

		super("My Dictionary"); //create GUI
		answerfield=new JTextField(null,35);
		ad=new JButton(" Add ");
		del=new JButton(" Delete ");
		sim=new JButton("Similar words");
		search=new JButton(" Search ");
		clr=new JButton(" Clear ");

		area=new JTextArea(10,30); //adjustments of text area
		area.setPreferredSize(new Dimension(10,30));
		area.setLineWrap(true);
		area.setWrapStyleWord(true);
		area.setFont(new Font("Sans",Font.ITALIC,12));

		Dimension die1=new Dimension(150, 25);//create a dimension

		ad.setPreferredSize(die1); //set dimension for buttons
		del.setPreferredSize(die1);
		sim.setPreferredSize(die1);
		search.setPreferredSize(die1);
		clr.setPreferredSize(die1);

		Operations op=new Operations();//create object as 'op' from Operations class

		ad.addActionListener(op);del.addActionListener(op);sim.addActionListener(op);search.addActionListener(op);clr.addActionListener(op);

		contentPanel=new JPanel();//for whole content
		tempPanel1=new JPanel();//for separate top border and text field
		tempPanel2=new JPanel();//for separate text field and text area
		tempPanel3=new JPanel();//for separate text area and buttons

		contentPanel.setBackground(Color.BLACK);contentPanel.setLayout(new FlowLayout()); //set preferred sizes and colors for panels
		tempPanel1.setBackground(Color.BLACK);tempPanel1.setPreferredSize(new Dimension(400, 15));
		tempPanel2.setBackground(Color.BLACK);tempPanel2.setPreferredSize(new Dimension(400, 30));
		tempPanel3.setBackground(Color.BLACK);tempPanel3.setPreferredSize(new Dimension(400, 20));

		contentPanel.add(tempPanel1, BorderLayout.NORTH);//allocate spaces for panels according to the layout
		contentPanel.add(answerfield);
		contentPanel.add(clr);
		contentPanel.add(tempPanel3);
		contentPanel.add(area);
		contentPanel.add(tempPanel2);

		contentPanel.add(ad);contentPanel.add(search);contentPanel.add(sim);contentPanel.add(del);//allocate spaces for buttons according to the layout

		this.setContentPane(contentPanel);
	}//end of constructor

	//initialize class Operations
	private class Operations implements ActionListener{

		public void actionPerformed(ActionEvent event){ //method for do actions when click the buttons

			BinaryTree bst = FileRead.create();//take the Binary search tree which is implemeted in FileRead class

			try{
				FileWriter w = new FileWriter(file,true);
        		BufferedWriter bw = new BufferedWriter(w);
				JButton src=(JButton)event.getSource();

				if(src.equals(ad)){

					String getWord1 = answerfield.getText();//take the word which is type in answer field
					String getWord2=area.getText();//take the definition from text area field
					if(getWord1.isEmpty() || getWord2.isEmpty()){
			            area.setText(null);
			            JOptionPane.showMessageDialog(contentPanel,"Please enter your word.");
			            return;
			          }

					int num=bst.traverse(getWord1);//to check whether it is already in or not

					if(num==0){ //when the word is in the given word list show error msg
						area.setText(null);
						JOptionPane.showMessageDialog(contentPanel, "The word, "+getWord1+" is already in !");
					}
					else{
						//bst.addNode(getWord1,getWord2);//add the word to the tree
						w.write("\n"+getWord1.trim()+" - "+getWord2.trim());
						area.setText(null);
						JOptionPane.showMessageDialog(contentPanel, "The word, "+getWord1+" is added successfully !");//when the word is added give the msg
					}
				} //end of add button


					if(src.equals(del)){

						String getWord = answerfield.getText();//take the word which is type in answer field
						if(getWord.isEmpty()){
			            	area.setText(null);
			            	JOptionPane.showMessageDialog(contentPanel,"Please enter your word.");
			            	return;
			          	}

						int num1=bst.traverse(getWord);

						if(num1==0){ //to check whether it is already in or not
							int pressed=JOptionPane.showConfirmDialog(contentPanel, "Are you sure you want to delete "+getWord+" ?", "Message Box", JOptionPane.YES_NO_OPTION);
							if(pressed == JOptionPane.YES_OPTION){
								bst.delete(getWord);
								//bst.inOrderTraversal(bst.root);
								area.setText(null);
								JOptionPane.showMessageDialog(contentPanel, getWord+" is deleted!");
							}
						}
						else{ //if it is not in the dictionary show error msg
							JOptionPane.showMessageDialog(contentPanel, "No such a word to delete!");
						}
					} //end delete button


					if(src.equals(sim)){

						String getWord = answerfield.getText();//take the word which is type in answer field
						if(getWord.isEmpty()){
			            	area.setText(null);
			            	JOptionPane.showMessageDialog(contentPanel,"Please enter your word.");
			            	return;
			          	}

						Node tempNode1;//create temporary node
						tempNode1= bst.search(getWord);//search the word in binary tree and put it into the node
						String definition=tempNode1.def;//take the definition of the word

						BinaryDef bd = FileRead.createDef();//take the object from BinaryDef class which is implemeted in FileRead class
						Node tempNode2;//create temporary node
						tempNode2= bd.similar(definition);//search the word in binary tree and put it into the node

						if(tempNode2==null){
							JOptionPane.showMessageDialog(contentPanel, "No similar words for "+tempNode2.word);//when the word is not in the given word list show error msg
						}
						else{
							String returnWord = tempNode2.word;//take the definition of the word
							area.setText(null);
							getWord=getWord+";";
							for(int i=0;i<returnWord.length()-getWord.length();i++){
								if(returnWord.substring(i,i+getWord.length()).equals(getWord))
									returnWord=returnWord.substring(0,i)+returnWord.substring(i+getWord.length(),returnWord.length());
							}
							area.insert(returnWord,0);//return the definition
						}
					} // end similar word button

					if(src.equals(search)){

						String getWord = answerfield.getText();//take the word which is type in answer field
						if(getWord.isEmpty()){
			            	area.setText(null);
			            	JOptionPane.showMessageDialog(contentPanel,"Please enter your word.");
			            	return;
			          	}

						Node tempNode;//create temporary node
						tempNode= bst.search(getWord);//search the word in binary tree and put it into the node
						if(tempNode==null){
							JOptionPane.showMessageDialog(contentPanel, "No word found!");//when the word is not in the given word list show error msg
						}
						else{
							String returnWord = tempNode.def;//take the definition of the word
							area.setText(null);
							area.insert(returnWord,0);//return the definition
						}
					} //end search button

					if(src.equals(clr)){

						area.setText(null);
						equalClicked=false;
						opChosen=false;
						answerfield.setText(null);

					}
					bw.close();
					w.close();

			} //end of try
			catch(Exception e){
            	e.printStackTrace();
            	area.setText(null);
            	area.insert("Error: "+e,0);
            	JOptionPane.showMessageDialog(contentPanel,"Enter the word before press buttons!","Error Message",JOptionPane.ERROR_MESSAGE);
        	}//end of catch

		}//end of method
	}//end class Operations

}//end of class Dic

