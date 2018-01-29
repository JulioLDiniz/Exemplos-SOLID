<?php 


public enum TipoDebito { ContaCorrente, Poupanca }

public class Debito {

    public void Debitar(int valor, TipoDebito tipo){    

        if (tipo == TipoDebito.Poupanca)
       {

            // Debita Poupanca

        }

        if (tipo == TipoDebito.ContaCorrente)

        {

            // Debita ContaCorrente

        }

    }

}




//Seria melhor moldá-las dessa forma 

public abstract class Debito
{
    public abstract void Debitar(int valor);
}
 
public class DebitoContaCorrente : Debito
{
    public override void Debitar(int valor)
    {
        // Debita Conta Corrente
    }

}
 

public class DebitoContaPoupanca : Debito

{

    public override void Debitar(int valor)

    {

        // Debita Conta Poupança

    }

}

 

 ?>

