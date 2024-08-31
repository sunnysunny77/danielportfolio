import { preload_image } from "./utillites.js";

export const preload = () => {

    const urls_work = [
        "./images/furniture.webp", 
        "./images/fasera.webp", 
        "./images/access.webp", 
        "./images/daves.webp", 
        "./images/business.webp", 
        "./images/candid.webp", 
        "./images/weather.webp", 
        "./images/sliders.webp", 
        "./images/login.webp"
    ];

    const urls_about = [
        "./images/daniel.webp", 
    ];

    const path = location.pathname;

    if(path.includes("about")) {

        for (const url of urls_about) {

            preload_image(url);
        }
    } else {

        for (const url of urls_work) {

            preload_image(url);
        }
    }
};

