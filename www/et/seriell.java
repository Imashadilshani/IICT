package et;

public class seriell
extends netz
{
	private double wert;
	private int anzahl;
	private netz Ra;
	private netz Rb;

	public seriell(netz Ra_in, netz Rb_in){
		this.Ra = Ra_in;
		this.Rb = Rb_in;
		this.wert = (Ra.ohm() + Rb.ohm());
		this.anzahl = Ra.widerstaende() + Rb.widerstaende();
	}

	public double ohm(){
		return wert;
	}

	public int widerstaende(){
		return anzahl;
	}

}
