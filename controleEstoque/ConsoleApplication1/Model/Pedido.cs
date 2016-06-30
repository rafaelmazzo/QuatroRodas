using ConsoleApplication1.Banco;
using System;
using System.Collections.Generic;
using System.Data.SqlClient;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApplication1.Model
{
    public class Pedido
    {
        public int CodPedido { get; set; }
        public int CodProduto { get; set; }
        public int CodCliente { get; set; }
        //
        public Cliente Cliente { get; set; }
        public Produto Produto { get; set; }
        //
        public int NovoPedido(int codProduto, int codCliente)
        {
            try
            {
                int id = 0;
                Cliente clientePedido = Cliente.consultaCliente(codCliente);
                Produto produtoPedido = Produto.consultaProduto(codProduto);
                //
                if(clientePedido != null && produtoPedido != null){
                    Pedido novoPedido = new Pedido()
                    {
                        CodCliente = clientePedido.CodCliente,
                        CodPedido = produtoPedido.CodProduto
                    };
                    string query = string.Format("INSERT INTO PRODUTO (Nome, Descricao, Preco) VALUES ('{0}', '{1}', {2})", novoPedido.CodCliente, novoPedido.CodPedido);
                    id = new Base().ExecutaNonQuery(query);                    
                }
                return id;
                
            }
            catch (Exception)
            {
                throw;
            }
        }

        public List<Pedido> ListarPedidos()
        {
            try
            {
                List<Pedido> listPedido = new List<Pedido>();
                string query = "SELECT * FROM PEDIDO";
                
                //Executar query no Banco de Dados
                SqlDataReader Dr = new Base().ExecutaDR(query);
                if (Dr.HasRows)
                {
                    while (Dr.Read())
                    {
                        listPedido.Add(new Pedido()
                        {
                            CodProduto = Convert.ToInt32(Dr.GetValue(0)),
                            CodCliente = Convert.ToInt32(Dr.GetValue(1))
                        });
                    }
                }
                return listPedido;
            }
            catch (Exception)
            {
                throw;
            }
        }

        public Pedido consultaPedido(int codPedido)
        {
            try
            {
                Pedido pedido = new Pedido();
                string query = string.Format("SELECT * FROM PEDIDO WHERE Id = {0}", codPedido);

                //Executar query no Banco de Dados
                SqlDataReader Dr = new Base().ExecutaDR(query);
                if (Dr.HasRows)
                {
                    while (Dr.Read())
                    {
                        pedido = new Pedido()
                        {
                            CodProduto = Convert.ToInt32(Dr.GetValue(0)),
                            CodCliente = Convert.ToInt32(Dr.GetValue(1))
                        };
                    }
                }
                return pedido;
            }
            catch (Exception)
            {
                throw;
            }
        }

        public int atualizaCliente(Pedido pedido)
        {
            try
            {
                int res = -1;
                Pedido pedidoExiste = new Pedido();
                pedidoExiste = consultaPedido(pedido.CodPedido);
                if (pedidoExiste != null)
                {
                    pedidoExiste.CodCliente = pedido.CodCliente;
                    pedidoExiste.CodProduto = pedido.CodProduto;                    
                    //
                    string query = string.Format("UPDATE PEDIDO SET Nome = '{0}', Descricao = '{1}', Preco = {2} WHERE Id = {3}", pedidoExiste.CodCliente, pedidoExiste.CodProduto);
                    res = new Base().ExecutaNonQuery(query);
                }
                return res;

            }
            catch (Exception)
            {
                throw;
            }
        }

        public int removerPedido(int CodPedido)
        {
            try
            {
                int res = -1;
                string query = string.Format("DELETE FROM PEDIDO WHERE Id = {0}", CodPedido);
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
