
package employee.management.system;

import net.proteanit.sql.DbUtils;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.sql.ResultSet;

public class View_Employee extends JFrame implements ActionListener {

    JTable table;

    Choice choiseEMP;

    JButton searchbtn,print,update,back;

    View_Employee(){

        getContentPane().setBackground(new Color(255,131,122));
        JLabel search = new JLabel("Search By Employee Id");
        search.setBounds(20,20,150,20);
        add(search);

        choiseEMP = new Choice();
        choiseEMP.setBounds(180,20,150,20);
        add(choiseEMP);

        try{
            conn c = new conn();
            ResultSet resultSet = c.statement.executeQuery("select * from employee");
            while(resultSet.next()){
                choiseEMP.add(resultSet.getString("empid"));
            }

        }catch (Exception e){
            e.printStackTrace();
        }


        table = new JTable();
        try{
            conn c = new conn();
            ResultSet resultSet = c.statement.executeQuery("select * from employee");
            table.setModel(DbUtils.resultSetToTableModel(resultSet));

        }catch (Exception e){
            e.printStackTrace();

        }

        JScrollPane jp = new JScrollPane(table);
        jp.setBounds(0,100,900,600);
        add(jp);

        searchbtn = new JButton("Search");
        searchbtn.setBounds(20,70,80,20);
        searchbtn.addActionListener(this);
        add(searchbtn);

        print = new JButton("Print");
        print.setBounds(120,70,80,20);
        print.addActionListener(this);
        add(print);

        update = new JButton("Update");
        update.setBounds(220,70,80,20);
        update.addActionListener(this);
        add(update);

        back = new JButton("Back");
        back.setBounds(320,70,80,20);
        back.addActionListener(this);
        add(back);

        setSize(900,700);
        setLayout(null);
        setLocation(300,100);
        setVisible(true);

    }

    @Override
    public void actionPerformed(ActionEvent e) {
        if (e.getSource()==searchbtn){
            String query = "select * from employee where empid = '"+choiseEMP.getSelectedItem()+"'";
            try{
                conn c = new conn();
                ResultSet resultSet = c.statement.executeQuery(query);
                table.setModel(DbUtils.resultSetToTableModel(resultSet));

            }catch (Exception E){
                E.printStackTrace();
            }
        } else if (e.getSource()==print) {
            try{

                table.print();
            }catch (Exception E){
                E.printStackTrace();

            }

        } else if (e.getSource()==update) {
            setVisible(false);
            new UpdateEmployee(choiseEMP.getSelectedItem());

        }else {
            setVisible(false);
            new Main_class();
        }

    }

    public static void main(String[] args){

       new View_Employee();
    }
}
