import java.awt.*;
import java.util.*;
import java.io.*;

//initialize class
public class FileRead {

	 public static final String file = "wordList.txt";

    public static BinaryTree create(){ //method for read a text file and put it into binary tree which is created according to the word

    	BinaryTree binaryTree=new BinaryTree();//create an object from BinaryTree class
    	try{

			FileWriter w = new FileWriter(file,true);
	    	FileReader r=new FileReader(file);//read from wordList
	    	BufferedReader br=new BufferedReader(r);

	    	String str;

	    	while((str=br.readLine())!=null){

	    		StringTokenizer token=new StringTokenizer(str," ");//take words separate from a space

	    		String data1=token.nextToken(); //put the first word as the word
	    		String data2=token.nextToken("\n"); //remaining words as definition
	    		String definition=data2.substring(1);

				binaryTree.addNode(data1.trim(),definition.trim());//create nodes including the word and the definition

	    	} //end of the while loop

	    	br.close();//close the BufferReader
	    	r.close();//close the FileReader
	    	w.close(); //close the FileWriter
    	}//end try
    	catch(IOException e){
    		e.printStackTrace();
    	}//end catch

    	return binaryTree;//finally return the inputs as a binary tree
    } //end create method


    public static BinaryDef createDef(){ //method for read a text file and put it into binary tree which is created according to the definition
    	BinaryDef binaryDef=new BinaryDef();//create an object from BinaryDef class
    	try{

			FileWriter w = new FileWriter(file,true);
	    	FileReader r=new FileReader(file);//read from wordList
	    	BufferedReader br=new BufferedReader(r);

	    	String str;

	    	while((str=br.readLine())!=null){

	    		StringTokenizer token=new StringTokenizer(str," ");//take words separate from a space

	    		String data1=token.nextToken(); //put the first word as the word
	    		String data2=token.nextToken("\n"); //remaining words as definition
	    		String definition=data2.substring(1);

				binaryDef.addDef(data1.trim(),definition.trim());//create nodes including the word and the definition

	    	}//end of the while loop

	    	br.close();//close the BufferReader
	    	r.close();//close the FileReader
	    	w.close(); //close the FileWriter
    	}//end try
    	catch(IOException e){
    		e.printStackTrace();
    	}//end catch

    	return binaryDef;//finally return the inputs as a binary tree
    } //end create method


}//end FileRead class