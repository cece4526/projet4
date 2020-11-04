export class Session{
    constructor{
        this.login = document.getElementById('login');
        this.dataSession = {};
    }
    init(){
        this.loginSave();
        this.preremplir();
    }
    loginSave{
        if(!sessionStorage){
            return false;
        }
        this dataSession['login'] = this.login;
    }
    preremplir(){
        if(dataStorage != undefined){
            let login = JSON.parse(dataSession).login;
            if(login != undefined && login != null){
                this.login = login;
            }
        }
    }
}