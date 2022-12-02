import {Navbar,Nav,Container} from 'react-bootstrap'
import {Link} from 'react-bootstrap'
function Header(){
    return(
        <Navbar bg="dark" variant="dark">
        <Container>
          <Navbar.Brand href="#home">Ecommerce Dashboard</Navbar.Brand>
          <Nav className="me-auto">
            <Nav.Link href="/add">Add Product</Nav.Link>
            <Nav.Link href="/update">Update Product</Nav.Link>
            <Nav.Link href="/login">Login</Nav.Link>
            <Nav.Link href="/register">Register</Nav.Link>
          </Nav>
        </Container>
      </Navbar>
    )
}
export default Header