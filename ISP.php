<?php 

//Aqui a classe que implementar a interface ICarro será obrigada a implementar o método Turbo(), o que é um problema pois nem todo carro possui turbo.

public interface ICarro
{
    void Ignicao();
  
    void Acelerar();
 
    void Turbo();
}
  
public class Carro : ICarro
{
    public void Ignicao()
    {
    }
  
    public void Acelerar()
    {
    }
}


//Seria melhor moldada dessa forma, onde é separada  a responsabilidade de cada interface, onde cada classe fica com a responsabilidade bem definida.
 
 public interface ICarro
{
    void Ignicao();
  
    void Acelerar();
}
 
public interface ICarroTurbo : ICarro
{
    void Turbo();
}
  
public class Carro : ICarro
{
    public void Ignicao()
    {
    }
  
    public void Acelerar()
    {
    }
}
 
public class CarroTurbo : ICarroTurbo
{
    public void Ignicao()
    {
    }
  
    public void Acelerar()
    {
    }
 
    public void Turbo()
    {
    }
}

 ?>

