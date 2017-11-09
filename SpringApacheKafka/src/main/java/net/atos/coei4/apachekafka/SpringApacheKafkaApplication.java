package net.atos.coei4.apachekafka;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;

@SpringBootApplication
public class SpringApacheKafkaApplication {

	public static void main(String[] args) {
		System.getProperties().put("http.proxyHost","proxy-in.glb.my-it-solutions.net");
		System.getProperties().put("http.proxyPort", "84");
		System.getProperties().put("https.proxyHost","proxy-in.glb.my-it-solutions.net");
		System.getProperties().put("https.proxyPort", "84");
		SpringApplication.run(SpringApacheKafkaApplication.class, args);
	}
}
