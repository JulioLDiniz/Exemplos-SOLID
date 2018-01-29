<?php 


//Exemplo que fere o princípio DIP

public class Leitor
{
    public string Ler()
    {
        return "Leitura de algo";
    }
}
 
public class Escritor
{
    public void Escrever(string texto)
    {
        Console.WriteLine(texto);
    }
}
 
public class Copiador
{
    private Leitor _leitor;
    private Escritor _escritor;
 
    public Copiador(Leitor leitor, Escritor escritor)
    {
        _leitor = leitor;
        _escritor = escritor;
    }
 
    public void Copiar()
    {
        _escritor.Escrever(_leitor.Ler());
    }
}
 
public class Program
{
    private static void Main()
    {
        Leitor leitor = new Leitor();
        Escritor escritor = new Escritor();
        Copiador copiador = new Copiador(leitor, escritor);
        copiador.Copiar();
    }
}




//Seria melhor moldado da seguinte forma

public interface ILeitor
{
    string Ler();
}
 
public class ArquivoLeitor : ILeitor
{
    public string Ler()
    {
        return "Leitura de Arquivo";
    }
}
 
public interface IEscritor
{
    void Escrever(string texto);
}
 
public class ImpressoraEscritor : IEscritor
{
    public void Escrever(string texto)
    {
        Console.WriteLine(texto);
    }
}
 
public class Copiador
{
    private ILeitor _leitor;
    private IEscritor _escritor;
 
    public Copiador(ILeitor leitor, IEscritor escritor)
    {
        _leitor = leitor;
        _escritor = escritor;
    }
 
    public void Copiar()
    {
        _escritor.Escrever(_leitor.Ler());
    }
}
 
public class Program
{
    private static void Main()
    {
        ILeitor leitor = new ArquivoLeitor();
        IEscritor copiarParaImpressora = new ImpressoraEscritor();
        Copiador copiador = new Copiador(leitor, copiarParaImpressora);
        copiador.Copiar();
    }
}

 ?>

