function loadData(data){
	if(data =="btn1"){	
		document.getElementById("phoneImg").src = "https://media.istockphoto.com/photos/corona-virus-floating-microscopic-macro-mockup-picture-id1212382025?b=1&k=20&m=1212382025&s=170667a&w=0&h=h18TuLRM77maqyFkNT6LLBXTx1enHyGWQCMiPZ12ltc=";
		document.getElementById("para").innerHTML = "Germs are all around us, both in our environment and in our bodies. When a person is susceptible and they encounter a harmful organism, it can lead to disease and death.The body has many ways of defending itself against pathogens (disease-causing organisms). Skin, mucus, and cilia (microscopic hairs that move debris away from the lungs) all work as physical barriers to prevent pathogens from entering the body in the first place. When a pathogen does infect the body, our body’s defences, called the immune system, are triggered and the pathogen is attacked and destroyed or overcome." +"<br />"+ "Vaccines prime the immune system to detect a particular virus or bacteria by showing it a harmless version of the pathogen, or part of it – much like giving a bloodhound a rag to sniff – so that it can remember it and is able to mount a defence if the person ever becomes infected. They typically do this by stimulating the production of antibodies, which are proteins made by our bodies to fight disease. This can also help stimulate other parts of our immune defences, such as T cells. This is the basic premise for how all vaccines work; precisely how they achieve this can vary significantly. Some vaccines involve introducing a whole but inactivated (or a whole, live but shortened version) – and therefore safe – version of the germ into the body, while others contain only a specific part (such as a single protein normally found on the surface of the pathogen).";
		document.getElementById("div2").style.display = "none";
		document.getElementById("div3").style.display = "none";
		document.getElementById("div4").style.display = "none";
	}	
	else if(data =="btn2"){
		document.getElementById("phoneImg").src = "https://www.uoc.edu/portal/_resources/common/imatges/sala_de_premsa/noticies/2021/129-realitat-virtual-salut.jpg_914553990.jpg";
		document.getElementById("para").innerHTML = "Advancements in medical devices, diagnostic methods, treatment procedures, and medications contribute to better patient outcomes and healthier lives. But the training system has not advanced neck to neck when compared to the innovations in the medical field. Teaching surgeons poorly or not teaching them enough about these complex procedures and technologies will prove to be damaging for those who go under their knife. Complications would arise from those very innovations that were intended to bring benefits." + "<br />" + "Virtual Reality-based training targets these deep-rooted deficiencies transforms bookish learning into something that is practical and can be visualized. It essentially improves the skills and the confidence of the surgeons in a myriad of ways. A decade or two back, surgeons had to practice a new procedure about 10 to 20 times to gain proficiency but now, due to the complications involved, the number has gone up to 50–100 cases. That is exactly why Virtual Reality-based training is an absolute necessity." + "<br />" + "Although hospitals and universities have employed VR technology for training purposes for a few years now, there is limited material when it comes to documenting its effectiveness and the improvement it brings to the domain. Researchers at UCLA’s David Geffen School of Medicine had validated a VR-based surgical training technology named Osso VR, for a bone fracture repair procedure. Measured by the Global Five-Point rating scale, surgeons who were VR trained received significantly higher ratings in every category when compared to those who were traditionally trained. Results show that students who were trained using VR were able to complete the procedure 20% faster and performed 38% more steps correctly than those who were trained using the traditional processes.";
		document.getElementById("div1").style.display = "none";
		document.getElementById("div3").style.display = "none";
		document.getElementById("div4").style.display = "none";
	}
	else if(data =="btn3"){
		document.getElementById("phoneImg").src = "https://www.gavi.org/sites/default/files/vaccineswork/2022/Thumbnail/pavel-kalenik-Ql_SWytd1C4-unsplash_h2.jpg";
		document.getElementById("para").innerHTML = "A diet including more nuts, legumes, and whole grains could extend life expectancy, a study reveals. To encourage healthier diets, researchers have deployed a new tool which can help us understand the benefits and consequences of consuming certain food types." + "<br />" + "A young adult in the U.S. could add more than a decade to their life expectancy by changing their diet from a typical Western diet to an optimized diet that includes more legumes, whole grains and nuts, and less red and processed meat, according to a new study publishing February 8th in PLOS Medicine by Lars Fadnes of the University of Bergen, Norway, and colleagues." +"<br />"+ "Food is fundamental for health and, globally, dietary risk factors are estimated to lead to 11 million deaths and 255 million disability-adjusted life-years annually. In the new study, researchers used existing meta-analyses and data from the Global Burden of Diseases study to build a model that enables the instant estimation of the effect on life expectancy (LE) of a range of dietary changes." +"<br />"+ "For young adults in the United States, the model estimates that a sustained change from a typical Western diet to the optimal diet beginning at age 20 would increase LE by more than a decade for women (10.7 [uncertainty interval 5.9-14.1] years) and men (13.0 [6.9-17.3] years).";
		document.getElementById("div1").style.display = "none";
		document.getElementById("div2").style.display = "none";
		document.getElementById("div4").style.display = "none";
	}
	else if(data =="btn4"){
		document.getElementById("phoneImg").src = "https://miro.medium.com/max/875/0*5Kw2TU053Ya5uVIQ";
		document.getElementById("para").innerHTML = "Cancer scientists are using AI, DNA sequencing, precision oncology and other tech to improve treatment and diagnosis of the disease. Here are 6 advances. Breakthroughs include the DNA sequencing of more than 12,000 cancer tumours and a new test for diagnosing pancreatic cancer – one of the deadliest cancers." +"<br />"+ "In India, World Economic Forum partners are using emerging technologies like artificial intelligence (AI) and machine learning to transform cancer care. For example,AI-based risk profiling can help to screen for common cancers like breast cancer, leading to early diagnosis. AI technology can also be used to analyze X-rays to identify cancers, in places where imaging experts might not be available. These are two of 18 cancer interventions that The Centre for Fourth Industrial Revolution of the World Economic Forum India hopes to accelerate." +"<br />"+ "A treatment that makes immune cells hunt down and kill cancer cells was recently declared a success for leukaemia patients. The treatment, called CAR-T-cell therapy, involves removing and genetically altering immune cells, called T cells, from cancer patients. The altered cells then produce proteins called chimeric antigen receptors (CARs). These recognize and can destroy cancer cells. In the journalNature, scientists at the University of Pennsylvania announced that two of the first people treated with CAR-T-cell therapy were still in remission 12 years on.";
		document.getElementById("div1").style.display = "none";
		document.getElementById("div2").style.display = "none";
		document.getElementById("div3").style.display = "none";
	}
}



/*function priceForLoop() {
	var phone = ["iphone XS = Rs.105000/-", "iphone Xs Max = Rs 120000/-", "Iphone 8s plus = Rs 75000/-"];	  		 //indexed array
	document.getElementById("phoneImg").src = "images/list.jpg";
	var message = "List of Prices (using for loop)<br><br>";
	
	var len = phone.length;
	for(var i = 0; i<len; i++)
	{
		message += phone[i]+"<br>";
	}
	
	document.getElementById("para").innerHTML = message;
}

function productForInLoop() {
	var phone = [];
	phone ["Iphone XS"] = "RS 105000/-";
	phone ["Iphone XS Max"] = "RS 120000/-";				//associative array
	phone ["Iphone 8 plus"] = "RS 75000/-";
	
	document.getElementById("phoneImg").src = "images/list.jpg";
	var message = "List of Prices (using for loop)<br><br>";
	
	for(var items in phone) {
		message += items + " : " + phone[items] + "<br>";
	}
	
	document.getElementById("para").innerHTML = message;
}

function priceHigher() {
	var phone = [];
	
	phone ["Iphone XS"] = 105000;
	phone ["Iphone XS Max"] = 120000;
	phone ["Iphone 8 plus"] = 75000;
	phone ["Iphone 8 "] = 62000;
	phone ["Iphone 7 plus"] = 55000;
	
	document.getElementById("phoneImg").src = "images/list.jpg";
	var message = "List of Prices higher than 10000<br><br>";
	
	for(var items in phone) {
		if(phone[items]>100000) {
			message += items + " : " + phone[items] + "<br>";
		}
	}
	
	document.getElementById("para").innerHTML = message;
}

function priceLower() {
	var phone = [];
	
	phone ["Iphone XS"] = 105000;
	phone ["Iphone XS Max"] = 120000;
	phone ["Iphone 8 plus"] = 75000;
	phone ["Iphone 8 "] = 62000;
	phone ["Iphone 7 plus"] = 55000;
	
	document.getElementById("phoneImg").src = "images/list.jpg";
	var message = "List of Prices lower than 10000<br><br>";
	
	for(var items in phone) {
		if(phone[items]<100000) {
			message += items + " : " + phone[items] + "<br>";
		}
	}
	
	document.getElementById("para").innerHTML = message;

}

function calSum () {
	var i = 1;
	var message= "1 + 2 + 3 + 4 + 5 + 6 + 7 + 8 + 9 + 10";
	while(i <= 10) {
		message += i;
	}
	document.getElementById("para").innerHTML = message;
}
*/





