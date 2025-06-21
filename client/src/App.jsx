import { BrowserRouter, Routes, Route } from 'react-router-dom';
import Header from './components/Header';
import Footer from './components/Footer';
import Login from './pages/Login';
import Home from './pages/Home';
import OAuthCallback from './pages/OAuthCallback';
import "./assets/styles/index.css";

function App() {
  return (
    <>
      <Header />
      <BrowserRouter>
        <Routes>
          <Route path="/" element={<Login />} />
          <Route path="/home" element={<Home />} />
          <Route path="/oauth-callback" element={<OAuthCallback />} />
        </Routes>
      </BrowserRouter>
      <Footer />
    </>
  );
}

export default App;
