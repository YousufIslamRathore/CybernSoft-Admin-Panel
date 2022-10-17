const data = {
  labels: ["Red", "Blue", "Yellow"],
  datasets: [
    {
      label: "My First Dataset",
      data: [60, 40],
      backgroundColor: [
        "#186eb1",
        "#ffffff"
      ],
      borderColor: [
        "#fff",
        "#000"
      ],
      hoverOffset: 4,
    },
  ],
};
const options = {
  plugins: {
    legend: {
      display: false,
    },
  },
};
const config = {
  type: "doughnut",
  data,
  options,
};
const myDoughnut = new Chart(document.getElementById("myDoughnut"), config);
