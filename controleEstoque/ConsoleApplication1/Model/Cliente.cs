using ConsoleApplication1.Banco;
using System;
using System.Collections.Generic;
using System.Data.SqlClient;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApplication1.Model
{
    public class Cliente
    {
        public int CodCliente { get; set; }
        public string Nome { get; set; }
        public string Email { get; set; }
        public string Telefone { get; set; }
        //
        public int insertCliente(Cliente novoCliente)
        {
            try
            {
                int id = 0;
                string query = string.Format("INSERT INTO CLIENTE (Nome, Descricao, Preco) VALUES ('{0}', '{1}', {2})", novoCliente.Nome, novoCliente.Email, novoCliente.Telefone);

                //Executar query no Banco de Dados
                id = new Base().ExecutaNonQuery(query);
                return id;
            }
            catch (Exception)
            {
                throw;
            }
        }

        public List<Cliente> consultaProduto()
        {
            try
            {
                List<Cliente> listClientes = new List<Cliente>();
                string query = "SELECT * FROM CLIENTE";

                //Executar query no Banco de Dados
                SqlDataReader Dr = new Base().ExecutaDR(query);
                if (Dr.HasRows)
                {
                    while (Dr.Read())
                    {
                        listClientes.Add(new Cliente()
                        {
                            CodCliente = Convert.ToInt32(Dr.GetValue(0)),
                            Nome = Dr.GetValue(1).ToString(),
                            Email = Dr.GetValue(2).ToString(),
                            Telefone = Dr.GetValue(3).ToString()
                        });
                    }
                }
                return listClientes;
            }
            catch (Exception)
            {
                throw;
            }
        }

        public Cliente consultaCliente(int CodCliente)
        {
            try
            {
                Cliente cliente = new Cliente();
                string query = string.Format("SELECT * FROM CLIENTE WHERE Id = {0}", CodCliente);

                //Executar query no Banco de Dados
                SqlDataReader Dr = new Base().ExecutaDR(query);
                if (Dr.HasRows)
                {
                    while (Dr.Read()){
                        cliente.CodCliente = Convert.ToInt32(Dr.GetValue(0));
                        cliente.Nome = Dr.GetValue(1).ToString();
                        cliente.Email = Dr.GetValue(2).ToString();
                        cliente.Telefone = Dr.GetValue(3).ToString();
                    }
                }
                return cliente;
            }
            catch (Exception)
            {
                throw;
            }
        }

        public int atualizaCliente(Cliente cliente)
        {
            try
            {
                int res = -1;
                Cliente clienteExiste = new Cliente();
                clienteExiste = consultaCliente(cliente.CodCliente);
                if (clienteExiste != null)
                {
                    clienteExiste.Nome = cliente.Nome;
                    clienteExiste.Email = cliente.Email;
                    clienteExiste.Telefone = cliente.Telefone;
                    //
                    string query = string.Format("UPDATE CLIENTE SET Nome = '{0}', Descricao = '{1}', Preco = {2} WHERE Id = {3}", clienteExiste.Nome, clienteExiste.Email, clienteExiste.Telefone);
                    res = new Base().ExecutaNonQuery(query);
                }
                return res;

            }
            catch (Exception)
            {
                throw;
            }
        }

        public int removerCliente(int CodCliente)
        {
            try
            {
                int res = -1;
                string query = string.Format("DELETE FROM CLIENTE WHERE Id = {0}", CodCliente);

                //Executar query no Banco de Dados
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
