using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace WindowsFormsApplication1
{
    public partial class Calculadora : Form
    {

        public Calculadora()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void sum_CheckedChanged(object sender, EventArgs e)
        {
            
        }

        private void txt1_TextChanged(object sender, EventArgs e)
        {
            double n1 = double.Parse(txt1.Text);
            double n2 = double.Parse(txt2.Text);
            double resultado;

            if (div.Checked == true) //Division
            {
                resultado = n1/n2;
                r.Text = Convert.ToString(resultado);
                MessageBox.Show("Bien Dividido");
            }
            else if ( mul.Checked == true) //Multiplicacion
            {
                resultado = n1*n2;
                r.Text = Convert.ToString(resultado);
                MessageBox.Show("Bien Multiplicado");
            }
            else if (sum.Checked == true) //Suma
            {
                resultado = n1+n2;
                r.Text = Convert.ToString(resultado);
                MessageBox.Show("Bien Sumado");
            }
            else if (res.Checked == true) //Resta
            {
                resultado = n1-n2;
                r.Text = Convert.ToString(resultado);
                MessageBox.Show("Bien Restado");
            }

          



