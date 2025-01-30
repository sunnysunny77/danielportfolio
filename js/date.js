const time = () => {

  const date = new Date();
  const time = date.toLocaleTimeString("en-AU", { timeZone: "Australia/Perth", hour: "numeric", minute: "2-digit" });
  document.querySelector("#date").innerHTML = `${time} &mdash; Perth`;
};

export const date = () => {

  setInterval(time, 1000);
};