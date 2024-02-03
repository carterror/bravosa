

		function fech() {
		dayTwo = new Date();
		hrNow = dayTwo.getHours();
		mnNow = dayTwo.getMinutes();
		scNow = dayTwo.getSeconds();
		miNow = dayTwo.getTime();
		if (hrNow == 0) {
		hour = 12;
		ap = " <sup>AM</sup>";
		} else if(hrNow <= 11) {
		ap = " <sup>AM</sup>";
		hour = hrNow;
		} else if(hrNow == 12) {
		ap = " <sub>PM</sub>";
		hour = 12;
		} else if (hrNow >= 13) {
		hour = (hrNow - 12);
		ap = " <sub>PM</sub>";
		}
		if (hrNow >= 13) {
		hour = hrNow - 12;
		}
		if (mnNow <= 9) {
		min = "0" + mnNow;
		}
		else (min = mnNow)
		if (scNow <= 9) {
		secs = "0" + scNow;
		} else {
		secs = scNow;
		}
		time = hour + ":" + min + ":" + secs + ap;
        self.status = time;
		setTimeout("fech()", 1000 );
        document.getElementById("fech").innerHTML= time + "<br>";

		}

