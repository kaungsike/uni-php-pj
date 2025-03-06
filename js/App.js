import handleModal from "./core/handleModal.js";
import handleMonitor from "./core/handleMonitor.js";
import handleStudent from "./core/handleStudent.js";
import listener from "./core/listener.js";

class App{
    init(){
        console.log("Js Start");
        listener();
        handleModal();
        handleMonitor();
        handleStudent();

    }
}

export default App;