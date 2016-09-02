import javax.swing.*;
public class MainDic {

    public static void main(String[] args) {

    	Dic dic=new Dic();//create an object from class Dic
    	dic.setSize(425,400); //set preffered size for the dictionary
    	dic.setDefaultCloseOperation(JFrame.DISPOSE_ON_CLOSE);
    	dic.setVisible(true);
    	dic.setResizable(false);
    }


}

