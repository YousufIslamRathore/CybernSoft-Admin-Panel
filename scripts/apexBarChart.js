var ownerCountArray = [44, 55, 57, 56, 61, 58]

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
      "A",
      "B",
      "R",
      "R1",
      "R2",
      "RG",
    ],
    labels: {
      style: {
        fontSize: '14px',
        fontWeight: 600,
      }
    }
  },
  yaxis: {
    title: {
      text: "No. of Houses",
    },
    labels: {
      style: {
        fontSize: '13px',
        fontWeight: 600,
      }
    }
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
