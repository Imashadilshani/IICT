package et;

/*
 * Poti bekommt Maximalwert, setWert darf nur
 * bis zu diesem Wert regeln, sonst Errorhandling
 */

public class potentiometer
extends widerstand
{

	private double maxwert;
	private double wert;
	private int anzahl;

	/**
	 * @param mw - Maximalwert des Potentiometers
	 */
	public potentiometer(double mw){
		/*
		 * Der Befehl super(mw) muss aufgerufen werden, da sonst super() automatisch angenommen wuerde.
		 * Die Klasse Wiederstand hat aber nur einen Konstruktor der einen Wert erhalten MUSS.
		 */
		super(mw);
		this.maxwert = mw;
		this.anzahl = 1;
	}

	/**
	 *
	 * @param w - Wert innerhalb des gueltigen Bereiches setzen.
	 */

	public void setWert(double w){
		if( (w <= maxwert && w >=0) ){
			this.wert = w;
			System.out.println("" +
					"Der Wert" + w + "wurde gesetzt.\n");
		}
		if( w > maxwert ){
			this.wert = maxwert;
			System.out.println("" +
					"Der Wert " + w + " " +
					"übersteigt den Maximalwert" + maxwert + ".\n" +
					"Dieser wurde gesetzt.\n");
		}
		if( w < 0 ){
			this.wert = 0;
			System.out.println("" +
					"Widerstände können nur positive Werte haben.\n" +
					"Es wurde ein Wert von 0 gesetzt.\n");
		}
	}

	public double ohm() {
		return wert;
	}

	public int widerstaende() {
		return anzahl;
	}
}
