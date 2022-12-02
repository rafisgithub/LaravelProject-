import React ,{useState} from "react"
import {userHistory} from 'react-router-dom'
function Register(){
    const [name,setName]=useState("")
    const [email,setEmail]=useState("")
    const [password,setPassword]=useState("")
    const history=userHistory();
    async function signUp(){
        let item={name,email,password}
        console.warn(item)
        let result= await fetch("http://127.0.0.1:8000/api/register",{
            method:'POST',
            body:JSON.stringify(item),
            Headers:{
                "Content-Type":'apllication/json',
                "Accept":'application/json'
            }
        })
        result = await result.json()
        localStorage.setItem("user-info",JSON.stringify(result))
        history.push("/add")
    }
    return(
        <div className="container col-sm-6">
            <h1>Register page</h1>
            <input type={"text"} value={name} onChange={(e)=>setName(e.target.value)} className="form-control" placeholder="Name"></input><br/>
            <input type={"text"} value={email} onChange={(e)=>setEmail(e.target.value)} className="form-control" placeholder="Email"></input><br/>
            <input type={"password"} value={password} onChange={(e)=>setPassword(e.target.value)} className="form-control" placeholder="Password"></input><br/>
            <button onClick={signUp} className="btn btn-primary">Sign Up</button>

        </div>
        
        
    )
}
export default Register
