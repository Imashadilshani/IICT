package et;

public class parallel
extends netz
{
	private double wert;
	private int anzahl;
	private netz Ra;
	private netz Rb;

	public parallel(netz Ra_in, netz Rb_in){
		this.Ra = Ra_in;
		this.Rb = Rb_in;
		this.wert = 1 / (1/Ra.ohm() + 1/Rb.ohm());
		this.anzahl = Ra.widerstaende() + Rb.widerstaende();
	}

	public double ohm(){
		return wert;
	}

	public int widerstaende(){
		return anzahl;
	}

}
