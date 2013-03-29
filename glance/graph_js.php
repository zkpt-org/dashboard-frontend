<script>
var margin = {top: 30, right: 30, bottom: 50, left: 40},
    width  = 760 - margin.left - margin.right,
    height = 400 - margin.top  - margin.bottom;

var x = d3.scale.linear()
    .range([0, width]);

var y = d3.scale.linear()
    .range([height, 0]);

var color = d3.scale.ordinal().range(['#3ea4bf','#F6BB33', '#49bf92', '#a084bf', '#FF6A13', '#bf5b5b' ]);

var xAxis = d3.svg.axis()
    .scale(x)
    .orient("bottom");

var yAxis = d3.svg.axis()
    .scale(y)
    .orient("left");

var line = d3.svg.line()
    .interpolate("basis")
    .x(function(d) { return x(d.date); })
    .y(function(d) { return y(d.engagement); });

var svg = d3.select("#graph .hide").append("svg")
    .attr("width", width + margin.left + margin.right)
    .attr("height", height + margin.top + margin.bottom)
    .attr("id", "glance-graph")
  .append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

var weeks = [];

d3.tsv("../data/glance.tsv", function(error, data) {
	color.domain(d3.keys(data[0]).filter(function(key) { return key !== "Week"; }));

  data.forEach(function(d) {
	d.date = parseInt(d.Week);
	weeks.push(d.date);
  });

  var users = color.domain().map(function(name) {
    return {
      name: name,
      values: data.map(function(d) {
		return {date: d.date, engagement: +d[name]};
      })
    };
  });

  x.domain([
	d3.min(weeks),d3.max(weeks)
  ]);

  y.domain([
      d3.min(users, function(c) { return d3.min(c.values, function(v) { return v.engagement; }); })*0.90,
      d3.max(users, function(c) { return d3.max(c.values, function(v) { return v.engagement; }); })*1.1
  ]);

  svg.append("g")
      .attr("class", "x axis")
      .attr("transform", "translate(0," + height + ")")
      .call(xAxis)
      .append("text")
	  .attr("class", "text")
      .attr("y", 30)
	  .attr("x", 600)
      .attr("dy", ".71em")
      .text("Time period in weeks");

  svg.append("g")
      .attr("class", "y axis")
      .call(yAxis)
      .append("text")
	  .attr("class", "text")
      .attr("y", -5)
	  .attr("x", 5)
      .attr("dy", ".71em")
      .text("Percentage of users");

  var user = svg.selectAll(".user")
      .data(users)
      .enter().append("g")
      .attr("class", "user");

  user.append("path")
      .attr("d", function(d) { return line(d.values); })
      .style("stroke", function(d) {return color(d.name); })
      .attr("class",function(d) { return "line line-" + d.name.replace(" ","-"); });

  user.append("circle")
      .datum(function(d) { return {name: d.name, value: d.values[d.values.length - 1]}; })
      .attr("transform", function(d) {return "translate(" + x(d.value.date) + "," + y(d.value.engagement) + ")"; })
      .attr("r", 3)
      .attr("fill",function(d) { return color(d.name); })
      .attr("class",function(d) { return "line-" + d.name.replace(" ","-"); });
  
  d3.csv("../data/Events.csv", function(data){
      
      data.forEach(function(e) {
        
        user.append("circle")
          .datum(function(d){ return { name: d.name, value: d.values[check(d,e.EventWeek1)] }; })
          .attr("transform", function(d) { return "translate(" + x(e.EventWeek1) + "," + y(d.value.engagement) + ")"; })
          .attr("r", 3.5)
          .attr("stroke",function(e) { return color(e.name); })
          .attr("fill",function(e) { return "#FFFFFF"; })
          .attr("class",function(d) { return "line-" + d.name.replace(" ","-"); });
      });
  });

});


function check(arr, val){
    var retVal = false;
    $.each(arr, function(k,v){
        $.each(arr["values"], function(i, v2){
            if (val == v2.date) retVal = i;
        });
    });
    return retVal;
}
</script>