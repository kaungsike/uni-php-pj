import { monitor_like_btn } from "./selectors.js";

const handleMonitor = () => {
    monitor_like_btn && monitor_like_btn.forEach((btn) => {

        btn.addEventListener("click",() => {
            console.log("u clicked like btn");
        })

    })
}

export default handleMonitor;