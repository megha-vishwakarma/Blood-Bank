function getBotResponse(input) {// Blood donation
    if (input == "blood donation center near me") {
       return "Aditya Birla Memorial Hospital Blood Centre,Pimpri Serological Institute Blood Bank , Sanjeevani Blood Bank";
   } else if (input == "blood") {
       return "Nearly 7% of the body weight of a human is made up of blood.Platelets, white blood cells and red blood cells are all found floating in blood plasma.";
   }else if (input == "rbc") {
       return "Red blood cells contain a protein called hemoglobin, which carries oxygen from the lungs to all parts of the body";
   }
   else if (input == "hello") {
    return "Hello there!👋";
} else if (input == "goodbye") {
    return "Talk to you later!";
}else if (input == "hi") {
    return " Hi there!👋             Is there something I can help with? I'd be happy to assist you😇";
}else if (input == "bye") {
    return "Okay bye ! Take care!😃";
}
else if (input == "ok") {
    return "Alright !😃 Any other question";
}else if (input == "thank you") {
    return "My pleasure 🙂😁";
}
    else {
       return "Try asking something else!";
   }
} 
