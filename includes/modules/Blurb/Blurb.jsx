// External Dependencies
import React, { Component } from 'react';

// Internal Dependencies
import './style.css';


class Blurb extends Component {

  static slug = 'dibl_blurb';

  render() {
    const Content = this.props.content;

    return (
      <h1>
        <Content/>
      </h1>
    );
  }
}

export default Blurb;
