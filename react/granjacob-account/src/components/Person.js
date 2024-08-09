import React, { useState, useEffect } from 'react';

const Person = () => {
    const [persons, setPersons] = useState([]);
    const [formData, setFormData] = useState({ id: '', name: '', age: '' });
    const [isEditing, setIsEditing] = useState(false);

    useEffect(() => {
        fetchPersons();
    }, []);

    const fetchPersons = async () => {
        try {
            const response = await fetch('http://granjacob.com/jacobbe/persons');
            if (!response.ok) throw new Error('Network response was not ok');
            const data = await response.json();
            setPersons(data);
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
            if (isEditing) {
                // Update person
                await fetch(`http://granjacob.com/jacobbe/persons/${formData.id}`, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(formData),
                });
                setIsEditing(false);
            } else {
                // Create new person
                await fetch('http://granjacob.com/jacobbe/persons', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(formData),
                });
            }
            setFormData({ id: '', name: '', age: '' });
            fetchPersons();
        } catch (error) {
            console.error('Submit error:', error);
        }
    };

    const handleEdit = (person) => {
        setFormData(person);
        setIsEditing(true);
    };

    const handleDelete = async (id) => {
        try {
            await fetch(`http://granjacob.com/jacobbe/persons/${id}`, {
                method: 'DELETE',
            });
            fetchPersons();
        } catch (error) {
            console.error('Delete error:', error);
        }
    };

    return (
        <div className="App">
            <h1>Person Management</h1>
            <form onSubmit={handleSubmit}>
                <input
                    type="text"
                    name="name"
                    value={formData.name}
                    onChange={handleChange}
                    placeholder="Name"
                    required
                />
                <input
                    type="number"
                    name="age"
                    value={formData.age}
                    onChange={handleChange}
                    placeholder="Age"
                    required
                />
                <button type="submit">{isEditing ? 'Update' : 'Add'} Person</button>
            </form>
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                {persons.map((person) => (
                    <tr key={person.id}>
                        <td>{person.id}</td>
                        <td>{person.name}</td>
                        <td>{person.age}</td>
                        <td>
                            <button onClick={() => handleEdit(person)}>Edit</button>
                            <button onClick={() => handleDelete(person.id)}>Delete</button>
                        </td>
                    </tr>
                ))}
                </tbody>
            </table>
        </div>
    );
};

export default Person;