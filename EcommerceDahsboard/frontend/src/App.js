import logo from './logo.svg';
import './App.css';
import Header from './Header';
import {BrowserRouter,Routes,Route} from 'react-router-dom'
import AddProduct from './AddProduct';
import UpdateProduct from './UpdateProduct';
import Login from './login';
import Register from './Register';
function App() {
  return (
    <div className="App">
      <Header />
      <h1>Ecommerce Project</h1>
      <BrowserRouter>
      <Routes>
        <Route path='/add' element={<AddProduct/>}></Route>
        <Route path='/update' element={<UpdateProduct/>}></Route>
        <Route path='/login' element={<Login/>}></Route>
        <Route path='/register' element={<Register/>}></Route>
      </Routes>
      </BrowserRouter>
    </div>
  );
}

export default App;
