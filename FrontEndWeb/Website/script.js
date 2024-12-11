function getData(){
    var username = document.getElementById("username").value;

    document.getElementById("display").innerHTML = "Hello, " + username;
}   

function getDayData()
{    
    Day1 = Number(document.getElementById("day1").value);
    Day2 = Number(document.getElementById("day2").value);
    Day3 = Number(document.getElementById("day3").value);
    Day4 = Number(document.getElementById("day4").value);
    Day5 = Number(document.getElementById("day5").value);
    Day6 = Number(document.getElementById("day6").value);
    Day7 = Number(document.getElementById("day7").value);

    (document.getElementById("day1").value = "");
    (document.getElementById("day2").value = "");
    (document.getElementById("day3").value = "");
    (document.getElementById("day4").value = "");
    (document.getElementById("day5").value = "");
    (document.getElementById("day6").value = "");
    (document.getElementById("day7").value = "");


    var total = Day1+Day2+Day3+Day4+Day5+Day6+Day7;
    var done = false;

    if (total <= 20)
    {
        document.getElementById('status').value = "";
        document.getElementById('status').innerHTML = "Good attempt! Try again.";
        done = false;

    }
    else
    {
        document.getElementById('status').value = "";
        document.getElementById('status').innerHTML = "Congratulations! You can proceed to next level.";
        done = true;
    }

    const labels = [
        'Day 1',
        'Day 2',
        'Day 3',
        'Day 4',
        'Day 5',
        'Day 6',
        'Day 7'
    ];
    
    const data = {
        labels: labels,
        datasets: [{
        label: 'Distances',
        backgroundColor: 'rgb(255,255,0)',
        borderColor: 'rgb(0,255,255)',
        data: [Day1, Day2, Day3, Day4, Day5, Day6, Day7],
        }],
    };

    const config = {
        type: 'line',
        data: data
    };

    const myChart= new Chart(
        document.getElementById('myChart'),
        config
    );

}