	
	var search= document.getElementById('search1');
	var search_area = document.getElementById('search_area');
	var suggestion = document.getElementById('suggestion');
		
			function showsuggestionblock(output){
				suggestion.style.display = 'block';
				suggestion.innerHTML = output;
				
			}
			
			function getsuggestion(data){
				var output = '';
					for(var i=0;i<data.length;i++){
						output+= '<li>';
						output+= '<a href=#>';
						output+=data[i]+"</a></li>"
					}
				showsuggestionblock(output);	
			}
		
		function suggestioncalcualte(){
			var q = search.value;
				suggestion.style.display = 'none';
				
		var xml = new XMLHttpRequest();
		xml.open('GET','http://localhost/mangla/ajax_example/get_suggestion.php?search='+q,true);
		//	xml.setRequestHeader('X-Requested-With','XMLHttpRequest');
		xml.onreadystatechange = function(){
		if( xml.status == 200 && xml.readyState == 4){
			var data = JSON.parse(xml.responseText);
			//data ='{}'
			getsuggestion(data);
		}
		
		};xml.send();}
		search.addEventListener('input',suggestioncalcualte);
		