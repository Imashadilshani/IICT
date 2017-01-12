package et;

public class widerstand
extends netz
{
	private double wert;
	private int anzahl;

	public widerstand(double w){
		this.wert = w;
		this.anzahl = 1;
	}

	public double ohm() {
		return wert;
	}

	public int widerstaende() {
		return anzahl;
	}

}