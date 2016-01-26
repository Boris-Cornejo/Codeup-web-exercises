/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package collapsedspaces;

import java.io.*;
import java.util.*;

/**
 *
 * @author boriscornejo
 */
public class CollapsedSpaces {

    /**
     * @param args the command line arguments
     * @throws java.io.FileNotFoundException
     */
    public static void main(String[] args) throws FileNotFoundException{
         Scanner input = new Scanner(new File("/Users/boriscornejo/desktop/words.txt"));
        PrintStream output = 
                new PrintStream(new File("/Users/boriscornejo/desktop/words2.txt" ));
        while(input.hasNextLine()) {
            String text = input.nextLine();
            collapsedSpaces(text, output);
            collapsedSpaces(text, System.out);
        }
    }
    
    public static void collapsedSpaces( String text, PrintStream output){
        Scanner data = new Scanner (text);
        if (data.hasNext()){
            output.print(data.next());
            while (data.hasNext()){
                output.print(" " + data.next());
            }
        }
        output.println();
        // TODO code application logic here
        
    }
    
}
