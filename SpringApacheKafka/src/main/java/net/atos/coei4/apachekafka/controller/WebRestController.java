package net.atos.coei4.apachekafka.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

import net.atos.coei4.apachekafka.services.KafkaProducer;
import net.atos.coei4.apachekafka.storage.MessageStorage;

@RestController
@RequestMapping(value="/jsa/kafka")
public class WebRestController {

	@Autowired
	KafkaProducer producer;

	@Autowired
	MessageStorage storage;

	@GetMapping(value="/producer")
	public String producer(@RequestParam("data") String data) {
		System.out.println("inside producer");
		producer.send(data);

		return "Done";
	}

	@GetMapping(value="/consumer")
	public String getAllRecievedMessage(){
		System.out.println("inside consumer");
		String messages = storage.toString();
		storage.clear();

		return messages;
	}
}
