import java.math.*;

//define a BinaryDef class for find Similar words
public class BinaryDef {

	Node root;

	//method for adding a word with definition
	public void addDef(String word,String def){

		Node node=new Node(word,def);

		if(root==null){ //when adding first word
			root=node;
			return;
		}
		else{ //adding words after first word

			Node firstNode=root;
			Node parent;

			while(true){

				parent=firstNode;

				int num=checkDef(def,firstNode.def);

				if(num==-1){ //add to left side node
					firstNode=firstNode.leftNode;

					if(firstNode==null){
					  	parent.leftNode=node;
					  	return;
					 }
				}

				if(num==1){ //add to right side node
					firstNode=firstNode.rightNode;

					if(firstNode==null){
					  	parent.rightNode=node;
					  	return;
					 }
				}

				if(num==0){ //avoid to adding same word again and again
					firstNode.word+=";"+word;
					return;

				}

			}//end while loop

		}//end else
	}//end addNode method

	//method for check two strings which start from same letters
	public int checkDef(String def1,String def2){

		int len=Math.min(def1.length(),def2.length());
		int i=0;
		int num=0;
		for(;i<len;i++){

			int c1=(int)def1.charAt(i);
			int c2=(int)def2.charAt(i);

			if(c1>c2){
				num= 1;//add to right side
				break;
			}
			if(c1<c2){
				num= -1;//add to left side
				break;
			}
		}//end of for loop

		if( i==len ){
			if(def1.length()>def2.length()){
				num= 1;//add to right side
			}
			if(def1.length()<def2.length()){
				num= -1;//add to left side
			}
			if(def1.length()==def2.length()){
				num=0;//to find same words
			}
		}
		return num;

	}//end method check

	//method for traverse through the tree
	public void inOrderTraversal(Node firstNode){

		if(firstNode!=null){

			inOrderTraversal(firstNode.leftNode);
			System.out.println(firstNode);
			inOrderTraversal(firstNode.rightNode);
		}
	}//end inOrderTraversal method



	//method for search a word
	public Node similar(String def){

		Node firstNode=this.root;
		char w=def.charAt(0);
		int dkey=(int)w;

		while(!((firstNode.def).equals(def))){

			int i=checkDef(def,firstNode.def);

			if(i==-1){
				firstNode=firstNode.leftNode;
			}
			if(i==1){
				firstNode=firstNode.rightNode;
			}
			if(i==0){
				firstNode=firstNode;
			}

			if(firstNode==null)
				return null;
		}//end while loop

		return firstNode;
	}//end search method
}//end of BinaryTree

