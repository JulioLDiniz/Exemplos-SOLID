<?php 


//No exemplo do princípio SRP essa classe está mal moldada

public class DebitoContaCorrente{

    public void ValidarSaldo(int valor) { }

    public void DebitarConta(int valor) { }

    public void EmitirComprovante() { }

}

//Seria melhor separa-las assim


	public class DebitoContaCorrente{
		public void DebitarConta(int valor) { }
	}
    
 	public class SaldoContaCorrente{
 		public void ValidarSaldo(int valor) { }
 	}
	public class ComprovanteContaCorrente{
		public void EmitirComprovante() { }
	}

 ?>

