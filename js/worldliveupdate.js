	function wl_covid(){
		// var link = "https://api.covid19api.com/summary"
		$.get("https://api.covid19api.com/summary",function(data){
			// var wt_data = document.getElementById('wt_data');
			var tcnf = document.getElementById('tcnf');
			var trec = document.getElementById('trec');
			var td = document.getElementById('td');
			
			tcnf.innerHTML = data['Global']['TotalConfirmed'];
			trec.innerHTML = data['Global']['TotalRecovered'];
			td.innerHTML = data['Global']['TotalDeaths'];

		})
	}







	function covid(){
		$.get( "https://api.covid19api.com/summary",
				function(data){
				// console.log(data['Countries'].length); 
				var w_table = document.getElementById('w_table');
				for (var i=1; i<(data['Countries'].length); i++)
				{
					var c = w_table.insertRow();
					c.insertCell(0);
					w_table.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
					w_table.rows[i].cells[0].style.background = '#3a86ff';
					w_table.rows[i].cells[0].style.color = '#ffffff';
					w_table.rows[i].cells[0].style.padding = '1vh 0';


					c.insertCell(1);
					w_table.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
					w_table.rows[i].cells[1].style.background = '#FC8952';
					w_table.rows[i].cells[1].style.padding = '1vh 0';


					c.insertCell(2);
					w_table.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
					w_table.rows[i].cells[2].style.background = '#00b285';
					w_table.rows[i].cells[2].style.padding = '1vh 0';


					c.insertCell(3);
					w_table.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
					w_table.rows[i].cells[3].style.background = '#261447';
					w_table.rows[i].cells[3].style.color = '#ffffff';
					w_table.rows[i].cells[3].style.padding = '1vh 0';


					c.insertCell(4);
					w_table.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
					w_table.rows[i].cells[4].style.background = '#ffbe0b';
					w_table.rows[i].cells[4].style.padding = '1vh 0';


					c.insertCell(5);
					w_table.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
					w_table.rows[i].cells[5].style.background = '#aacc00';
					w_table.rows[i].cells[5].style.padding = '1vh 0';
					

					c.insertCell(6);
					w_table.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
					w_table.rows[i].cells[6].style.background = '#710000';
					w_table.rows[i].cells[6].style.color = '#ffffff';
					w_table.rows[i].cells[6].style.padding = '1vh 0';

				}
			}
		);
	}