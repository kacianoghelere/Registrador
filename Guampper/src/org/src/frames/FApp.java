/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.src.frames;

import javax.swing.*;
import org.jdesktop.swingx.*;
import java.awt.*;
/**
 *
 * @author kaciano
 */
public class FApp extends JFrame{
    //<editor-fold desc="Declarações">
    JButton JBReg; 
    JDesktopPane JDPDesktop;
    JMenuBar JMBMenus;
    JPanel JPFundo, JPMenus, JPDesktop, JPUsu, JPErro;
    JXTaskPaneContainer JXTPCContainer;    
    
    //</editor-fold>
    
    //==========================================================================
    
    public FApp(){
        
        //----------------------------------------------------------------------
        
        //<editor-fold desc="Parametros da classe">
        super("Guampp");
        int x = 0, y = 0, w = 100, h = 30, c = 0; 
        this.getContentPane();
        setLayout(null);
        setSize(1000, 700);
        //</editor-fold>
        
        //----------------------------------------------------------------------
        
        //<editor-fold desc="Parametros dos componentes">
            
        
            //<editor-fold desc="Paineis">
            this.JPFundo = new JPanel();
            this.JPFundo.setLayout(null);
            this.JPFundo.setBackground(Color.gray);
            
            
            //</editor-fold>
            
            //..................................................................
            
            //<editor-fold desc="Barra de menus">
            this.JMBMenus = new JMenuBar();
            //</editor-fold>
            GroupLayout layout = new GroupLayout(getContentPane());
            getContentPane().setLayout(layout);
            layout.setHorizontalGroup(
                layout.createParallelGroup(GroupLayout.Alignment.LEADING)
                    .addComponent(JPFundo, GroupLayout.DEFAULT_SIZE, GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addComponent(JMBMenus, GroupLayout.DEFAULT_SIZE, GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
            );
            layout.setVerticalGroup(
                layout.createParallelGroup(GroupLayout.Alignment.LEADING)
                .addGroup(layout.createSequentialGroup()
                    .addComponent(JPFundo, GroupLayout.DEFAULT_SIZE, GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
            );
        //</editor-fold>
        
        //----------------------------------------------------------------------
        
        //<editor-fold desc="Posição dos componentes">
            //<editor-fold desc="Painel principal">
            this.JPFundo.setBounds(0, 0, this.getWidth(), this.getHeight());
            //</editor-fold>
            //<editor-fold desc="Barra de menus">
            this.JMBMenus.setBounds(0, 0, this.getWidth(), h);
            //</editor-fold>
        //</editor-fold>
        
        //----------------------------------------------------------------------
        
        //<editor-fold desc="Adição dos componentes">
            //<editor-fold desc="Barra de menus">
            this.JPFundo.add(JMBMenus);
            //</editor-fold>
            
            //<editor-fold desc="Painel principal">
            this.add(JPFundo);
            //</editor-fold>
        //</editor-fold>
    }    
    
    //==========================================================================
    
    public static void main(String[] args) {
        FApp app = new FApp();
        app.setDefaultCloseOperation(EXIT_ON_CLOSE);
        app.setVisible(true);
    }
}
