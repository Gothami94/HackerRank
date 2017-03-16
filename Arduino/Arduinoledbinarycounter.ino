
// Arduino 8 led binary counter
// 
// Made by gothamikarunarathna gothamikarunarathna
// License: CC-BY-SA 3.0
// Downloaded from: https://circuits.io/circuits/4320956-arduino-8-led-binary-counter

// Pin 13,12,11,10,9,8,7, and 6 have an LED connected on most Arduino boards.
int led1 = 13;
int led2 = 12;
int led3 = 11;
int led4 = 10;
int led5 = 9;
int led6 = 8;
int led7 = 7;
int led8 = 6;

// the setup routine runs once when you press reset:
void setup() {
  // initialize the digital pins as an output.
  pinMode(led1, OUTPUT);
  pinMode(led2, OUTPUT);
  pinMode(led3, OUTPUT);
  pinMode(led4, OUTPUT);
  pinMode(led5, OUTPUT);
  pinMode(led6, OUTPUT);
  pinMode(led7, OUTPUT);
  pinMode(led8, OUTPUT);
}

// the loop routine runs over and over again forever:
void loop() {
  for(int i=0;i<256;i++){
    for(int j=0;j<8;j++){
      int led=j+6;
      if((i>>j)&1){
        digitalWrite(led, HIGH);   // turn the LED on (HIGH is the voltage level)
        //delay(500);
      }
      else{
        digitalWrite(led, LOW);    // turn the LED off by making the voltage LOW	
        //delay(500);
      }
    }
    digitalWrite(led1, LOW);
    digitalWrite(led2, LOW);
    digitalWrite(led3, LOW);
    digitalWrite(led4, LOW);
    digitalWrite(led5, LOW);
    digitalWrite(led6, LOW);
    digitalWrite(led7, LOW);
    digitalWrite(led8, LOW);
    delay(2000);
  }
      	
}
