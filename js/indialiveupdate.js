	function it_covid(){
		// var link = "https://api.covid19api.com/summary"
		$.get("https://api.covid19india.org/data.json",function(data){
			// var wt_data = document.getElementById('wt_data');
			var itcnf = document.getElementById('itcnf');
			var itrec = document.getElementById('itrec');
			var itd = document.getElementById('itd');
			var iac = document.getElementById('iac');
			itcnf.innerHTML = data['statewise'][0]['confirmed'];
			itrec.innerHTML = data['statewise'][0]['recovered'];
			itd.innerHTML = data['statewise'][0]['deaths'];
			iac.innerHTML = data['statewise'][0]['active'];

		})
	}







	function covid(){
		$.get( "https://api.covid19india.org/data.json",function(data){
				// console.log(data['statewise'].length); 
				var i_table = document.getElementById('i_table');
				for (var i=1; i<(data['statewise'].length); i++)
				{
					var c = i_table.insertRow();
					c.insertCell(0);
					i_table.rows[i].cells[0].innerHTML = data['statewise'][i]['state'];
					i_table.rows[i].cells[0].style.background = '#3a86ff';
					i_table.rows[i].cells[0].style.color = '#ffffff';
					i_table.rows[i].cells[0].style.padding = '1vh 0.5vw';


					c.insertCell(1);
					i_table.rows[i].cells[1].innerHTML = data['statewise'][i]['active'];
					i_table.rows[i].cells[1].style.background = '#FC8952';
					i_table.rows[i].cells[1].style.padding = '1vh 0.5vw';


					c.insertCell(2);
					i_table.rows[i].cells[2].innerHTML = data['statewise'][i]['confirmed'];
					i_table.rows[i].cells[2].style.background = '#00b285';
					i_table.rows[i].cells[2].style.padding = '1vh 0.5vw';


					c.insertCell(3);
					i_table.rows[i].cells[3].innerHTML = data['statewise'][i]['recovered'];
					i_table.rows[i].cells[3].style.background = '#261447';
					i_table.rows[i].cells[3].style.color = '#ffffff';
					i_table.rows[i].cells[3].style.padding = '1vh 0.5vw';


					c.insertCell(4);
					i_table.rows[i].cells[4].innerHTML = data['statewise'][i]['deaths'];
					i_table.rows[i].cells[4].style.background = '#ffbe0b';
					i_table.rows[i].cells[4].style.padding = '1vh 0.5vw';


					c.insertCell(5);
					i_table.rows[i].cells[5].innerHTML = data['statewise'][i]['lastupdatedtime'];
					i_table.rows[i].cells[5].style.background = '#aacc00';
					i_table.rows[i].cells[5].style.padding = '1vh 0.5vw';
					

					// c.insertCell(6);
					// i_table.rows[i].cells[6].innerHTML = data['statewise'][i]['NewDeaths'];
					// i_table.rows[i].cells[6].style.background = '#710000';
					// i_table.rows[i].cells[6].style.color = '#ffffff';
					// i_table.rows[i].cells[6].style.padding = '1vh 0';

				}
			}
		);
	}