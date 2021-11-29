namespace WindowsFormsApplication1
{
    partial class Calculadora
    {
        /// <summary>
        /// Variable del diseñador requerida.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Limpiar los recursos que se estén utilizando.
        /// </summary>
        /// <param name="disposing">true si los recursos administrados se deben eliminar; false en caso contrario, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Código generado por el Diseñador de Windows Forms

        /// <summary>
        /// Método necesario para admitir el Diseñador. No se puede modificar
        /// el contenido del método con el editor de código.
        /// </summary>
        private void InitializeComponent()
        {
            this.Numero = new System.Windows.Forms.Label();
            this.label1 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.txt1 = new System.Windows.Forms.TextBox();
            this.txt2 = new System.Windows.Forms.TextBox();
            this.r = new System.Windows.Forms.TextBox();
            this.sum = new System.Windows.Forms.RadioButton();
            this.res = new System.Windows.Forms.RadioButton();
            this.mul = new System.Windows.Forms.RadioButton();
            this.div = new System.Windows.Forms.RadioButton();
            this.btnr = new System.Windows.Forms.Button();
            this.btnl = new System.Windows.Forms.Button();
            this.btns = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // Numero
            // 
            this.Numero.AutoSize = true;
            this.Numero.Location = new System.Drawing.Point(30, 97);
            this.Numero.Name = "Numero";
            this.Numero.Size = new System.Drawing.Size(53, 13);
            this.Numero.TabIndex = 0;
            this.Numero.Text = "Numero 1";
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(30, 136);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(53, 13);
            this.label1.TabIndex = 1;
            this.label1.Text = "Numero 2";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(30, 170);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(55, 13);
            this.label2.TabIndex = 2;
            this.label2.Text = "Resultado\r\n";
            // 
            // txt1
            // 
            this.txt1.Location = new System.Drawing.Point(141, 90);
            this.txt1.Name = "txt1";
            this.txt1.Size = new System.Drawing.Size(100, 20);
            this.txt1.TabIndex = 3;
            this.txt1.TextChanged += new System.EventHandler(this.txt1_TextChanged);
            // 
            // txt2
            // 
            this.txt2.Location = new System.Drawing.Point(141, 129);
            this.txt2.Name = "txt2";
            this.txt2.Size = new System.Drawing.Size(100, 20);
            this.txt2.TabIndex = 4;
            // 
            // r
            // 
            this.r.Location = new System.Drawing.Point(141, 170);
            this.r.Name = "r";
            this.r.ReadOnly = true;
            this.r.Size = new System.Drawing.Size(100, 20);
            this.r.TabIndex = 5;
            // 
            // sum
            // 
            this.sum.AutoSize = true;
            this.sum.Location = new System.Drawing.Point(12, 29);
            this.sum.Name = "sum";
            this.sum.Size = new System.Drawing.Size(52, 17);
            this.sum.TabIndex = 6;
            this.sum.TabStop = true;
            this.sum.Text = "Suma";
            this.sum.UseVisualStyleBackColor = true;
            this.sum.CheckedChanged += new System.EventHandler(this.sum_CheckedChanged);
            // 
            // res
            // 
            this.res.AutoSize = true;
            this.res.Location = new System.Drawing.Point(70, 29);
            this.res.Name = "res";
            this.res.Size = new System.Drawing.Size(53, 17);
            this.res.TabIndex = 7;
            this.res.TabStop = true;
            this.res.Text = "Resta";
            this.res.UseVisualStyleBackColor = true;
            // 
            // mul
            // 
            this.mul.AutoSize = true;
            this.mul.Location = new System.Drawing.Point(129, 29);
            this.mul.Name = "mul";
            this.mul.Size = new System.Drawing.Size(89, 17);
            this.mul.TabIndex = 8;
            this.mul.TabStop = true;
            this.mul.Text = "Multiplicación";
            this.mul.UseVisualStyleBackColor = true;
            // 
            // div
            // 
            this.div.AutoSize = true;
            this.div.Location = new System.Drawing.Point(224, 29);
            this.div.Name = "div";
            this.div.Size = new System.Drawing.Size(62, 17);
            this.div.TabIndex = 9;
            this.div.TabStop = true;
            this.div.Text = "División";
            this.div.UseVisualStyleBackColor = true;
            // 
            // btnr
            // 
            this.btnr.Location = new System.Drawing.Point(12, 233);
            this.btnr.Name = "btnr";
            this.btnr.Size = new System.Drawing.Size(75, 23);
            this.btnr.TabIndex = 10;
            this.btnr.Text = "Resultado";
            this.btnr.UseVisualStyleBackColor = true;
            // 
            // btnl
            // 
            this.btnl.Location = new System.Drawing.Point(112, 233);
            this.btnl.Name = "btnl";
            this.btnl.Size = new System.Drawing.Size(75, 23);
            this.btnl.TabIndex = 11;
            this.btnl.Text = "Limpiar";
            this.btnl.UseVisualStyleBackColor = true;
            this.btnl.Click += new System.EventHandler(this.btnl_Click);
            // 
            // btns
            // 
            this.btns.Location = new System.Drawing.Point(211, 233);
            this.btns.Name = "btns";
            this.btns.Size = new System.Drawing.Size(75, 23);
            this.btns.TabIndex = 12;
            this.btns.Text = "Salir";
            this.btns.UseVisualStyleBackColor = true;
            this.btns.Click += new System.EventHandler(this.btns_Click);
            // 
            // Calculadora
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.SystemColors.WindowFrame;
            this.ClientSize = new System.Drawing.Size(309, 308);
            this.Controls.Add(this.btns);
            this.Controls.Add(this.btnl);
            this.Controls.Add(this.btnr);
            this.Controls.Add(this.div);
            this.Controls.Add(this.mul);
            this.Controls.Add(this.res);
            this.Controls.Add(this.sum);
            this.Controls.Add(this.r);
            this.Controls.Add(this.txt2);
            this.Controls.Add(this.txt1);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.Numero);
            this.ForeColor = System.Drawing.Color.FromArgb(((int)(((byte)(255)))), ((int)(((byte)(128)))), ((int)(((byte)(0)))));
            this.Name = "Calculadora";
            this.Text = "Calculadora";
            this.Load += new System.EventHandler(this.Form1_Load);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label Numero;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.TextBox txt1;
        private System.Windows.Forms.TextBox txt2;
        private System.Windows.Forms.TextBox r;
        private System.Windows.Forms.RadioButton sum;
        private System.Windows.Forms.RadioButton res;
        private System.Windows.Forms.RadioButton mul;
        private System.Windows.Forms.RadioButton div;
        private System.Windows.Forms.Button btnr;
        private System.Windows.Forms.Button btnl;
        private System.Windows.Forms.Button btns;
    }
}

