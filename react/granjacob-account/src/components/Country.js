import React, { useState, useEffect } from 'react';
import './Country.css'; // Ensure this file exists or create a separate CSS file for styling

const Country = () => {
    const [countries, setCountries] = useState([]);
    const [formData, setFormData] = useState({ id: '', name: '', code: '' });
    const [isEditing, setIsEditing] = useState(false);

    useEffect(() => {
        fetchCountries();
    }, []);

    const fetchCountries = async () => {
        try {
            const response = await fetch('http://granjacob.com/jacobbe/countries'); // Adjust the endpoint as necessary
            if (!response.ok) throw new Error('Network response was not ok');
            const data = await response.json();
            setCountries(data);
        } catch (error) {
            console.error('Fetch error:', error);
        }
    };

    const handleChange = (e) => {
        const { name, value } = e.target;
        setFormData({ ...formData, [name]: value });
    };

    const handleSubmit = async (e) => {
        e.preventDefault();
        try {
            const method = isEditing ? 'PUT' : 'POST';
            const url = isEditing
                ? `http://granjacob.com/jacobbe/countries/${formData.id}`
                : 'http://granjacob.com/jacobbe/countries';

            await fetch(url, {
                method: method,
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(formData),
            });

            setIsEditing(false);
            setFormData({ id: '', name: '', code: '' });
            fetchCountries();
        } catch (error) {
            console.error('Submit error:', error);
        }
    };

    const handleEdit = (country) => {
        setFormData(country);
        setIsEditing(true);
    };

    const handleDelete = async (id) => {
        try {
            await fetch(`http://granjacob.com/jacobbe/countries/${id}`, {
                method: 'DELETE',
            });
            fetchCountries();
        } catch (error) {
            console.error('Delete error:', error);
        }
    };

    return (
        <div className="App">
            <h1>Country Management</h1>
            <form onSubmit={handleSubmit}>
                <input
                    type="text"
                    name="name"
                    value={formData.name}
                    onChange={handleChange}
                    placeholder="Country Name"
                    required
                />

                <button type="submit">{isEditing ? 'Update' : 'Add'} Country</button>
            </form>
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                {countries.map((country) => (
                    <tr key={country.id}>
                        <td>{country.id}</td>
                        <td>{country.name}</td>
                        <td>{country.code}</td>
                        <td>
                            <button onClick={() => handleEdit(country)}>Edit</button>
                            <button onClick={() => handleDelete(country.id)}>Delete</button>
                        </td>
                    </tr>
                ))}
                </tbody>
            </table>
        </div>
    );
};

export default Country;