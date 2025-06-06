import { useEffect, useState } from 'react';
import axios from 'axios';

function App() {
  const [message, setMessage] = useState('');

  useEffect(() => {
    axios.get('http://localhost:8000/api/hello')
      .then((res) => setMessage(res.data.message))
      .catch((err) => console.error('API Error:', err));
  }, []);

  return (
     <div className="min-h-screen bg-gray-100 flex flex-col justify-center items-center">
      <div className="bg-white border-4 border-blue-500 rounded-xl shadow-md p-8 max-w-md w-full text-center">
        <h1 className="text-3xl font-bold text-blue-600 mb-4">React + Lar</h1>
        <p className="text-gray-700 text-lg">{message || 'Đang tải...'}</p>
      </div>
    </div>
  );
}

export default App;
