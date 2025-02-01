export const date = () => {

  const obj = document.querySelector("#date");

  if (!obj) {

    return;
  }

  setInterval(() => {

    const date = new Date();
    const time = date.toLocaleTimeString("en-AU", { timeZone: "Australia/Perth", hour: "numeric", minute: "2-digit" });
    obj.innerHTML = `${time} &mdash; Perth`;
  }, 1000);
};