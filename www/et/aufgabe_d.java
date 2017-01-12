package et;

/**
 * @author Jonas
 * http://www.ips.cs.tu-bs.de/struck/prog06/blatt07.pdf
 * Aufgabe 42d
 */

public class aufgabe_d
extends netz
{
	private double wert;
	private int anzahl;

	netz R1;
	netz R2;
	netz R3;
	netz R4;
	netz R5;
	netz R6;

	netz r1r3;
	netz r1r3_r2;
	netz r4r5;

	static double R1_wert = 100;
	static double R2_wert = 200;
	static double R3_wert = 300;
	static double R4_wert = 400;
	static double R5_wert = 500;
	static double R6_wert = 600;

	public aufgabe_d(){

		netz R1 = new widerstand(R1_wert);
		netz R2 = new widerstand(R2_wert);
		netz R3 = new widerstand(R3_wert);
		netz R4 = new widerstand(R4_wert);
		netz R5 = new widerstand(R5_wert);
		netz R6 = new widerstand(R6_wert);

		netz r1r3 = new parallel(R1,R3);
		netz r1r3_r2 = new seriell(r1r3,R2);
		netz r4r5 = new seriell(R4,R5);

		this.wert = 1 / (1/r1r3_r2.ohm() + 1/r4r5.ohm() + 1/R6.ohm());
		this.anzahl = r1r3_r2.widerstaende() + r4r5.widerstaende() + R6.widerstaende();
	}

	public double ohm(){
		return wert;
	}

	public int widerstaende(){
		return anzahl;
	}

	public static void main(String args[]){
		netz Netz = new aufgabe_d();
		System.out.println("Der Gesamtwiderstand des Netzes mit " +
				Netz.widerstaende() + " Widerständen beträgt " + Netz.ohm() + ".\n");
	}

}
