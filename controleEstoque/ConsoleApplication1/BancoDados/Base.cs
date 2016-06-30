using System;
using System.Collections.Generic;
using System.Data.Common;
using System.Data.SqlClient;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApplication1.Banco
{
    public class Base
    {
        private string _Endereco = "";
        private string _Porta = "1433";
        private string _Base = "";
        private string _Usuario = "";
        private string _Senha = "";
        private string _StringConexao = "";

        public Base()
        {
            _StringConexao = string.Format("Data Source={0},{1};Initial Catalog={2};User ID={3};Password={4};Trusted_Connection=no;MultipleActiveResultSets=True", _Endereco, _Porta, _Base, _Usuario, _Senha);
        }

        public string StringConexao
        {
            get { return _StringConexao; }
        }

        public SqlDataReader ExecutaDR(string SqlStr)
        {
            SqlConnection Dbc = null;
            SqlDataReader Reader = null;
            try
            {
                Dbc = new SqlConnection(_StringConexao);
                Dbc.Open();
                DbCommand Command = Dbc.CreateCommand();
                Command.CommandText = SqlStr;
                Reader = (SqlDataReader)Command.ExecuteReader();

            }
            catch (Exception)
            {
                throw;
            }
            return Reader;
        }

        public object ExecutaScalar(string SqlStr)
        {
            object Scalar = null;
            try
            {
                using (SqlConnection Dbc = new SqlConnection(_StringConexao))
                {
                    Dbc.Open();
                    DbCommand Command = Dbc.CreateCommand();
                    Command.CommandText = SqlStr;
                    Scalar = Command.ExecuteScalar();
                }

            }
            catch (Exception)
            {
                throw;
            }
            return Scalar;
        }

        public int ExecutaNonQuery(string SqlStr)
        {

            int res = -1;
            try
            {
                using (SqlConnection Dbc = new SqlConnection(_StringConexao))
                {
                    Dbc.Open();
                    DbCommand Command = Dbc.CreateCommand();
                    Command.CommandText = SqlStr;
                    res = Command.ExecuteNonQuery();
                }

            }
            catch (Exception)
            {
                throw;
            }
            return res;
        }


    }
}
