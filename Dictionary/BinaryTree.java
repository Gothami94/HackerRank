import java.math.*;

//initialize a node
class Node{

	String word;
 	String def;
 	int key;
	int dkey;

 	Node leftNode;
 	Node rightNode;

 	Node(String wrd,String df){ //Node constructor

  		word=wrd;
  		def=df;
  		char w=wrd.charAt(0);
  		char d=df.charAt(0);
 		key=(int)w;
  		dkey=(int)d;

 	}//end constructor

}//end Node class

//define a Binary Tree
public class BinaryTree {

	Node root;

	//method for adding a word with definition
	public void addNode(String word,String def){

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

				int num=check(word,firstNode.word);

				if(num==-1){ //add to left side node
					firstNode=firstNode.leftNode;

					if(firstNode==null){
					  	parent.leftNode=node;
					  	return ;
					 }
				}

				if(num==1){ //add to right side node
					firstNode=firstNode.rightNode;

					if(firstNode==null){
					  	parent.rightNode=node;
					  	return ;
					 }
				}

				if(num==0){ //avoid to adding same word again and again
					System.out.println( node.word+" is already in!");
					return;

				}

			}//end while loop

		}//end else
	}//end addNode method

	//method for check two strings which start from same letters
	public int check(String word1,String word2){

		int len=Math.min(word1.length(),word2.length());
		int i=0;
		int num=0;
		for(;i<len;i++){

			int c1=(int)word1.charAt(i);
			int c2=(int)word2.charAt(i);

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
			if(word1.length()>word2.length()){
				num= 1;//add to right side
			}
			if(word1.length()<word2.length()){
				num= -1;//add to left side
			}
			if(word1.length()==word2.length()){
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
	public Node search(String word){

		Node firstNode=this.root;
		char w=word.charAt(0);
		int key=(int)w;

		while(!((firstNode.word).equals(word))){

			int i=check(word,firstNode.word);

			if(i==-1){
				firstNode=firstNode.leftNode;
			}
			if(i==1){
				firstNode=firstNode.rightNode;
			}

			if(firstNode==null)
				return null;
		}//end while loop

		return firstNode;
	}//end search method

		//method for delete a word
	public boolean delete(String word){

		Node firstNode=root;
		Node parent=root;

		boolean isLeftNode=true;

		while(!((firstNode.word).equals(word))){

			parent=firstNode;

			int i=check(word,firstNode.word);

			if(i==-1){

				isLeftNode=true;
				firstNode=firstNode.leftNode;
			}
			if(i==1){
				isLeftNode=false;
				firstNode=firstNode.rightNode;
			}
			if(firstNode==null){
				return false;
			}
		} //end while loop

		if(firstNode.leftNode==null && firstNode.rightNode==null){ //if there is no right child and left child

			if(firstNode==root){
				root=null;
			}
			else if(isLeftNode){
				parent.leftNode=null;
			}
			else{
				parent.rightNode=null;
			}
		}

		else if(firstNode.rightNode==null){ //if there is no right child

			if(firstNode==root){
				root=firstNode.leftNode;
			}
			else if(isLeftNode){
				parent.leftNode=firstNode.leftNode;
			}
			else{
				parent.rightNode=firstNode.leftNode;
			}
		}

		else if(firstNode.leftNode==null){ //if there is no left child

			if(firstNode==root){
				root=firstNode.rightNode;
			}
			else if(isLeftNode){
				parent.leftNode=firstNode.rightNode;
			}
			else{
				parent.rightNode=firstNode.leftNode;
			}
		}
		else{ //left child and right child both are not null

			Node temp=replace(firstNode);

			if(firstNode==root)
				root=temp;

			else if(isLeftNode)
				parent.leftNode=temp;

			else
				parent.rightNode=temp;

			temp.leftNode=firstNode.leftNode;
		}

		return true;

	}//end delete method

	public Node replace(Node replacedNode){

		Node rParent=replacedNode;
		Node replacement=replacedNode;
		Node firstNode=replacedNode.rightNode;

		while(firstNode!=null){

			rParent=replacement;
			replacement=firstNode;
			firstNode=firstNode.leftNode;
		}

		if(replacement != replacedNode.rightNode){

			rParent.leftNode=replacement.rightNode;
			replacement.rightNode=replacedNode.rightNode;
		}

		return replacement;
	}

	//to find out the word is inside the dictionary when deleting and adding a new word
	public int traverse(String word){

		Node firstNode=this.root;
		char w=word.charAt(0);
		int key=(int)w;

		while(!((firstNode.word).equals(word))){

			int i=check(word,firstNode.word);

			if(i==-1){
				firstNode=firstNode.leftNode;
			}
			if(i==1){
				firstNode=firstNode.rightNode;
			}

			if(firstNode==null)
				return 1;
		} //end while loop

		if((firstNode.word).equals(word)){
			return 0;
		}
		return 1;

	}
}//end of BinaryTree

