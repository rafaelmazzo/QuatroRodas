using ConsoleApplication1.Banco;
using System;
using System.Collections.Generic;
using System.Data.SqlClient;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApplication1.Model
{
    public class Produto
    {
        public int CodProduto { get; set; }
        public string Nome { get; set; }
        public string Descricao { get; set; }
        public decimal Preco { get; set; }


        public int insertProduto(Produto item)
        {
            try
            {
                int id = 0;
                string query = string.Format("INSERT INTO PRODUTO (Nome, Descricao, Preco) VALUES ('{0}', '{1}', {2})", item.Nome, item.Descricao, item.Preco);

                //Executar query no Banco de Dados
                id = new Base().ExecutaNonQuery(query);
                return id;
            }
            catch (Exception)
            {
                throw;
            }
        }

        public List<Produto> consultaProduto()
        {
            try
            {
                List<Produto> listProduto = new List<Produto>();
                string query = "SELECT * FROM PRODUTO";

                //Executar query no Banco de Dados
                SqlDataReader Dr = new Base().ExecutaDR(query);
                if (Dr.HasRows)
                {
                    while (Dr.Read())
                    {
                        listProduto.Add(new Produto()
                        {
                            CodProduto = Convert.ToInt32(Dr.GetValue(0)),
                            Nome = Dr.GetValue(1).ToString(),
                            Descricao = Dr.GetValue(2).ToString(),
                            Preco = Convert.ToDecimal(Dr.GetValue(3))
                        });
                    }
                }
                return listProduto;
            }
            catch (Exception)
            {
                throw;
            }
        }

        public Produto consultaProduto(int CodProduto)
        {
            try
            {
                Produto produtoItem = new Produto();
                string query = string.Format("SELECT * FROM PRODUTO WHERE Id = {0}", CodProduto);

                //Executar query no Banco de Dados
                SqlDataReader Dr = new Base().ExecutaDR(query);
                if (Dr.HasRows)
                {
                    while (Dr.Read())
                    {
                        produtoItem = new Produto()
                        {
                            CodProduto = Convert.ToInt32(Dr.GetValue(0)),
                            Nome = Dr.GetValue(1).ToString(),
                            Descricao = Dr.GetValue(2).ToString(),
                            Preco = Convert.ToDecimal(Dr.GetValue(3))
                        };
                    }
                }
                return produtoItem;
            }
            catch (Exception)
            {
                throw;
            }
        }

        public int atualizaProduto(Produto item)
        {
            try
            {
                int res = -1;
                Produto produtoExiste = new Produto();
                produtoExiste = consultaProduto(item.CodProduto);
                if (produtoExiste != null)
                {
                    produtoExiste.Nome = item.Nome;
                    produtoExiste.Descricao = item.Descricao;
                    produtoExiste.Preco = item.Preco;
                    //
                    string query = string.Format("UPDATE CLIENTE SET Nome = '{0}', Descricao = '{1}', Preco = {2} WHERE Id = {3}", produtoExiste.Nome, produtoExiste.Descricao, produtoExiste.Preco);
                    res = new Base().ExecutaNonQuery(query);
                }
                return res;
                
            }
            catch (Exception)
            {
                throw;
            }
        }

        public int removerProduto(int CodProduto)
        {
            try
            {
                int res = -1;
                string query = string.Format("DELETE FROM Produto WHERE Id = {0}", CodProduto);

                res = new Base().ExecutaNonQuery(query);
                return res;
            }
            catch (Exception)
            {
                throw;
            }
        }


    }
}
