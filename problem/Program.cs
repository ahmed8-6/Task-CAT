


using System.Numerics;
using System.Security.Cryptography;
using System.Text;

namespace cSharpFund.firstpro
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int t = 1;
            //t = int.Parse(Console.ReadLine());
            while (t > 0)
            {
                solve();
                t--;
            }


        }

        static void solve()
        {
            string[] strs = Console.ReadLine().Split(" ");
            int n = 0;
            for (int i = 0; i < strs.Length; i++)
            {
                if (strs[i] == "++")
                    n++;
                else
                    n--;
            }
            Console.WriteLine(n);
            
        }
    }
}