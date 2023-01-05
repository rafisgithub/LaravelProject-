
import './App.css';
import {BrowserRouter as Router, Routes, Route} from 'react-router-dom';
import Home from './pages/Home';
import Projects from './pages/Projects';
import Experience from './pages/Experience';
import Navbar from './componets/Navbar';

function App() {
  return (
    <div className="App">
      <Router>
        <Navbar></Navbar>
        <Routes>
          <Route path='/' element={<Home />}></Route>
          <Route path='/projects' element={<Projects />}></Route>
          <Route path='/experience' element={<Experience />}></Route>
        </Routes>

      </Router>
   
    </div>
  );
}

export default App;
