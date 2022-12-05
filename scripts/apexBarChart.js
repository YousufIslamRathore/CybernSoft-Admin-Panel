ownerCountArray = [44, 55, 57, 56, 61, 58]


var options = {
  series: [
    {
      name: "Owners",
      data: ownerCountArray,
      color: "#186eb1",
    },
    {
      name: "Tenants",
      data: [76, 85, 101, 98, 87, 105],
      color: "#e5032dbd",
    },
    {
      name: "Unregisters",
      data: [35, 41, 36, 26, 45, 48],
      color: "#888",
    },
  ],
  chart: {
    type: "bar",
    height: 350,
  },
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: "55%",
      endingShape: "rounded",
    },
  },
  dataLabels: {
    enabled: false,
  },
  stroke: {
    show: true,
    width: 2,
    colors: ["transparent"],
  },
  xaxis: {
    categories: [
      "Block A",
      "Block B",
      "Block R",
      "Block R1",
      "Block R2",
      "Block RG",
    ],
  },
  yaxis: {
    title: {
      text: "No. of Houses",
    },
  },
  fill: {
    opacity: 1,
  },
  tooltip: {
    y: {
      formatter: function (val) {
        return val + " Houses";
      },
    },
  },
};

var chart = new ApexCharts(document.querySelector("#apexChart"), options);
chart.render();
