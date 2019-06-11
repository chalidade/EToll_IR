#include <SPI.h>
#include <RFID.h>
#define SS_PIN 10
#define RST_PIN 9
RFID rfid(SS_PIN,RST_PIN);
char text[50];
#include <IRremote.h>
IRsend irsend;
 
void setup() {
  Serial.begin(9600);                       
  SPI.begin();
  rfid.init();
}
 
void loop() {
   
   if(rfid.isCard()&&digitalRead(2)==HIGH){
        if(rfid.readCardSerial()){
            Serial.print(rfid.serNum[0]);
            Serial.print(" ");
            Serial.print(rfid.serNum[1]);
            Serial.print(" ");
            Serial.print(rfid.serNum[2]);
            Serial.print(" ");
            Serial.println(rfid.serNum[3]);
            irsend.sendSony(rfid.serNum[3], 12);
            
        }
    rfid.halt();
   } 
   delay(500); 
}
