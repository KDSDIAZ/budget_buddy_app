// google.charts.load("current", { packages: ["corechart"] });
// google.charts.setOnLoadCallback(drawChart);
export default function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ["Money Flow", "This Month"],
        ["Budget", ],
        ["Expenses", ],
        ["Savings", ],
        
    ]);

    var options = {
        title: "My Daily Activities",
        pieHole: 0.4,
    };

    var chart = new google.visualization.PieChart(
        document.getElementById("donutchart")
    );
    chart.draw(data, options);
}
