import {Navbar,Nav} from 'react-bootstrap'
import {Link} from 'react-router-dom'
function Header(){
    return (
        <div>
            <Navbar bg="dark" variant="dark">
    
          <Navbar.Brand href="#home">E-commerce</Navbar.Brand>
          <Nav className="me-auto navbar_wrapper">
            <Link to="/add">Add Product</Link>
            <Link to="/update">Update Product</Link>
            <Link to="/login">Login Product</Link>
            <Link to="/register">Register Product</Link>
            
          </Nav>
    
      </Navbar>
        </div>
    )
}
export default Header